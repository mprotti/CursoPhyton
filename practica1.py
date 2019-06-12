
#En este ejercicio deberas crear un script llamado personas.py que lea los datos de un fichero de texto, que transforme cada fila en un diccionario y lo a;ada a una lista llamada personas. Luego recorre las personas de la lista
#y para cada una muestra de forma amigable todos sus campos

# El fichero de texto se denominara personas.txt y tendra el siguiente contenido en texto plano (crealo previamente)

from io import open

fichero = open('personas.txt', 'r', encoding="utf8")
lineas = fichero.readlines()
fichero.close

personas = []
for linea in lineas:
    #Borramos los saltos de linea y separamos
    campos = linea.replace("\n", "").split(";")
   # print(campos)
    persona = {"id":campos[0], "nombre":campos[1], "apellidos":campos[2], "nacimiento":campos[3]}

    personas.append(persona)


for p in personas:
    print("(id{}) {} {} => {}".format(p['id'], p['nombre'], p['apellidos'], p['nacimiento']))


