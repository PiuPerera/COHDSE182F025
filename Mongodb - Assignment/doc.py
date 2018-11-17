import pymongo
client = pymongo.MongoClient()
db = client["login"]
collection = db["users"]

user_name = input("Enter User Name : ")
password = input("Enter password :")
for x in collection.find({},{"username":1,"password":1}):
    name=str(x["username"])
    password=str(x["password"])

if user_name==name and password==password:
    print("Login Successful")

else:
        print("Login Failed")
