
#Modo sólo escritura posicionándose al final del archivo (a). En este caso se crea el archivo, si no existe, pero en caso de que exista se posiciona al final, manteniendo el contenido original. Y agregar texto a su criterio



def escribirlinea(datos):
    f= open('examen.txt', 'a+')
    f.write(datos)
    f.close()
    return ("Agregada la ultima linea")

print(escribirlinea("\n Esta es la ultima linea"))