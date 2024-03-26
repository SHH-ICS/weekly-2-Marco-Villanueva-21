import math
x = input("Input a diameter. ")

if x.isdigit():

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

  elif x <= 0:
    print("Error! Invalid input (did you input a negative number?)")

else: 
  print("Error! Invalid input (did you input a letter?)")