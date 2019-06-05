

import json
data = [True, False, None, 'Hola, Mundo!']
with open("data.json", "w") as f:
    json.dump(data, f)
