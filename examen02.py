
#Escribir una clase en python que revierta una cadena de palabras
#Entrada: "Mi Diario Python"
#Salida: "Python Diario Mi"



class revierta():

    def __init__(self, string):

        self.string = string
        self.invertida = string.split()[::-1]
        self.invertida = ' '.join(self.invertida)

    def __str__(self):

        return ('Frase original: {} \nFrase revertida: {}'.format(self.string, self.invertida))


string = "Mi Diario Python"
a = revierta(string)
print(a)