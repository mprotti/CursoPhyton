
class ConvertirRomano():

    def __init__(self, nroman):
        self.numRomano = nroman

    def romano_a_numero(self ,num):
        resultado = 0
        valores = {
            'M': 1000,
            'D': 500,
            'C': 100,
            'L': 50,
            'X': 10,
            'V': 5,
            'I': 1
        }

        l = []
        resultado = 0
        for i in num:
            for k ,v in valores.items():
                if i == k:
                    resultado += v

        return resultado


    def __str__(self):
        return 'Numero Romano: {}\n'.format(self.romano_a_numero(self.numRomano))

r = ConvertirRomano('MM')
print(r)