caesar=input("If you need to encrypt or decrypt Password type 'yes' & if not type 'no' & enter : ")
while(caesar=="yes"):
    n=input("Enter Your Choice (Encrypt=1 Decrypt=2) : ")
    if(n=="1"):
      plaintext=input("Input Password : ")
      alphabet="abcdefghijklmnopqrstuvwxyz"
      ke=3
      cipher=''
      for c in plaintext:
         if c in alphabet:
           cipher +=alphabet[(alphabet.index(c)+ke)%(len(alphabet))]
      print('Your Encrypted Password is : ' + cipher)
    elif(n=="2"):
      plaintext=input("Input Password : ")
      alphabet="zyxwvutsrqponmlkjihgfedcba"
      ke=3
      cipher=''
      for c in plaintext:
         if c in alphabet:
           cipher +=alphabet[(alphabet.index(c)+ke)%(len(alphabet))]
      print('Your Decrypted Password is : ' + cipher)
    else:
        print("Wrong Choice")

    caesar=input("If you need to encrypt or decrypt password type 'yes' & if not type 'no' & enter : ")
