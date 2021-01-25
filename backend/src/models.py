from sqlalchemy import Column, ForeignKey, Date, Integer, String
from sqlalchemy.sql import table, column, select
from dbconn import db

class Donacion(db.Model):
    __tablename__ = 'donacion'
    id = Column(Integer, primary_key=True,nullable=False)
    fecha = Column(Date,nullable=False)
    id_donante = Column(String(10),ForeignKey('persona.cedula'),nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.id}>'.format(self=self))

class Donacion_item(db.Model):
    __tablename__ = 'donacion_item'
    id = Column(Integer, primary_key=True,nullable=False)
    id_donacion = Column(Integer,ForeignKey('donacion.id'),nullable=False)
    descripcion = Column(String(120),nullable=False)
    cantidad = Column(Integer, nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.id}>'.format(self=self))

class Mascota(db.Model):
    __tablename__ = 'mascota'
    id = Column(Integer, primary_key=True,nullable=False)
    nombre = Column(String(45),nullable=False)
    edad = Column(Integer,nullable=False)
    especie = Column(String(20),nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.id}>'.format(self=self))

class Persona(db.Model):
    __tablename__ = 'persona'
    cedula = Column(String(10),primary_key=True,nullable=False)
    nombre = Column(String(45),nullable=False)
    apellido = Column(String(45),nullable=False)
    fechaNacimiento = Column(Date,nullable=False)
    tipo = Column(String(20),nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.cedula}>'.format(self=self))

class Voluntario(db.Model):
    __tablename__ = 'voluntario'
    id_persona = Column(String(10),ForeignKey('persona.cedula'),nullable=False,primary_key=True)
    tipo = Column(String(20),nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.id_persona}>'.format(self=self))

class Adopcion(db.Model):
    __tablename__ = 'adopcion'
    id_duenio = Column(String(10),ForeignKey('persona.cedula'),nullable=False, primary_key=True)
    id_mascota = Column(Integer,ForeignKey('mascota.id'),nullable=False, primary_key=True)
    fecha = Column(Date,nullable=False)
    def __repr__(self):
        return (u'<{self.__class__.__name__}: {self.id_duenio}>'.format(self=self))

donacion =Donacion(fecha="2021-1-24",id_donante="1234567890")
db.session.add(donacion)
db.session.commit()