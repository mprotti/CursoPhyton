
def esneg(numero):
    return (numero < 0)

listaS= [-3, -2, 0, 1, 9, -5]


print(list(filter(esneg, listaS)))