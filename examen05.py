
#Escribir una función cargar_datos que reciba un nombre de archivo, cuyo contenido tiene el formato clave, valor y devuelva un diccionario con el primer campo como clave y el segundo como valor (dato, ejemplo Ana, Luis, etc.).
#Escribir una función guardar_datos que reciba un diccionario y un nombre de archivo, y guarde el contenido del diccionario en el archivo, con el formato clave, valor.


from io import open

def open_file(fichero):
    fichero = open('persona.txt', 'r')
    datos = fichero.readlines()
    fichero.close()
    return datos


def cargar_datos (datos):
    personas = {}
    for i in datos:
        personas[str(i.strip().split(":")[0])] = i.strip().split(':')[1]
    return personas

def guardar_datos(datos):
    fichero = open("persona.txt", 'a+')
    fichero.write(datos)
    fichero.close()


guardar_datos('\n5:Julio')
dat = open_file('personas.txt')
print(cargar_datos(dat))
