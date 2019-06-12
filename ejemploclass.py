

class Persona:
    def __init__(self, nombre, edad):
        self.nombre = nombre
        self.edad = edad


    def __str__(self):
        return "{} de {} anos".format(self.nombre, self.edad)



personas = [
    Persona("Juan", 35),
    Persona("Marta", 16),
    Persona("Manuel", 78),
    Persona("Eduardo", 12)
]

menores = filter(lambda persona:persona.edad <18, personas)

for menor in menores:
    print(menor)
