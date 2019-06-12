

import ast
texto = "{'uno':1, 'dos':2,}"
print(ast.literal_eval(texto)['uno'])


