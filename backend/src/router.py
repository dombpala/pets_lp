from api import app
import datetime
from flask import request
from flask_restful import Resource, Api
from models import Persona, Donacion, Mascota, Adopcion
from dbconn import session
api = Api(app)


class RouterPersona(Resource):
    def get(self, persona_id):
        p = Persona.query.filter_by(cedula=persona_id).first()
        return {"id":p.cedula,"name":p.nombre,"last_name":p.apellido,"birthdate":p.fechaNacimiento.isoformat(),"type":p.tipo}
    
    def post(self):
        persona = Persona(cedula=request.form["dni"],nombre=request.form["name"],apellido=request.form["last_name"],fechaNacimiento=request.form["birthdate"],tipo=request.form["type"])
        session.add(persona)
        session.commit()

class RouterDonacion(Resource):
    def get(self, donacion_id):
        d = Donacion.query.filter_by(id=donacion_id).first()
        p = Persona.query.filter_by(cedula=d.id_donante).first()
        return {"id":d.id,"date":d.fecha.isoformat(),"donor":{"id":p.cedula,"name":p.nombre,"last_name":p.apellido,"birthdate":p.fechaNacimiento.isoformat(),"tipo":p.tipo}}

class RouterMascota(Resource):
    def get(self, mascota_id):
        m = Mascota.query.filter_by(id=mascota_id).first()
        return {"id":m.id,"name":m.nombre,"age":m.edad,"specie":m.especie}

    def post(self):
        mascota = Mascota(nombre=request.form["name"],edad=request.form["age"],especie=request.form["specie"])
        session.add(mascota)
        session.commit()


class RouterAdopcion(Resource):
    def post(self):
        adopcion = Adopcion(id_duenio=request.form["id_owner"],id_mascota=request.form["id_pet"],fecha=datetime.datetime.now().isoformat())
        session.add(adopcion)
        session.commit()




api.add_resource(RouterPersona, '/persona/', '/persona/<string:persona_id>')
api.add_resource(RouterDonacion, '/donacion/<string:donacion_id>')
api.add_resource(RouterMascota, '/mascota/', '/mascota/<string:mascota_id>')
api.add_resource(RouterAdopcion, '/adopcion/')

if __name__ == '__main__':
    app.run(debug=True)
