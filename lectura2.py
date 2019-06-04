


archivo = open("texto.txt" , "a")
print(archivo.tell())
archivo.write("\nNueva linea. \nAqui \ty alla. ")
print(archivo.tell())
archivo.close()


