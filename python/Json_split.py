# <ghatpande> on 14-April-2017 for AppMeter
# This python script is used to import the large JSON files and split it inot multiple smaller parts
# Currently each chunk will be 500 MB large. This can be changed in the code

import pandas as pd
from pandas import DataFrame as df
import json

class Jsonloads:
    def read_in_chunks(self, file_object, chunk_size=500000000):
        while True:
            data = file_object.read(chunk_size)
            if not data:
                break
            yield data

count = 1;
# <ghatpande> on 14-April-2017 for AppMeter
# Give the path of the large input JSON file
f = open('C:\JSON\Amarjit-JSON\\details-2013-01-07.json')
for piece in Jsonloads().read_in_chunks(f):
    pathname = "C:\JSON\Amarjit-JSON\\part" + str(count) + ".json"
    text_file = open(pathname, "w")
    text_file.write(piece)
    text_file.close()
    count = count + 1;
    print("\n ==========The new chunk is ======== \n")

print("Count is %d" %count);
