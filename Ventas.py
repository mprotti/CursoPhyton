

Producto = input (" Ingrese un producto:" )

Cantidad = input ( "Ingrese la cantidad del producto:" )

Precio = input ( "Ingrese el precio del producto:" )

Subtotal = int(Cantidad)*int(Precio)

IVA = Subtotal*0.13

Total = IVA + Subtotal

print ("El Total es:" + str(Total))

