import math
x = ""

while x.isdigit() == False:

  x = input("Input a diameter. ")

  if x.isnumeric() and x.find("-") ==0 or x.replace(".", "").isdigit():
    break
  else:
    print("Invalid input! Did you input a negative number or letter?")

x = float(x)
if x > 0:
  r = x/2

  b = r*r
  A = b*(math.pi)
  A = round(A, 2)
  print ("The area is", A)

  y = 2*(math.pi)
  C = y*r
  C = round(C, 2)
  print ("The circumferece is", C)
else: 
 print("Error! Invalid input (did you input a letter or a negative number?)")
    