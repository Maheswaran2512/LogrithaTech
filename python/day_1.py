#Day 1 Python Session
"""
Topics Covered:
Python Installation
Data Types & Operators
"""

print("Day 1 Python Session")
a=10 #integer
b=3.14 #Float
c=True # Boolean
d=3+4j #Complex
name="Logritha" #String
name_1='Logritha' #String

print(a)
print(b)
print(c)
print(d)
print(name)
print(name_1)

print(type(a))
print(type(b))
print(type(c))
print(type(d))
print(type(name))
print(type(name_1))

a=21
b=10

print(a+b) #31
print(a-b) #11 
print(a/b) #2.1
print(a%b) #1
print(a//b) #2

a=21
b=10
c=30
d=25

print(a>b) #True
print(a<b)  #False
print(c>=d)  #True
print(d<=b)  #False
print(a==b)  #False
print(c!=d)  #True

#Type Casting
a=int(input("Enter the A:"))
b=int(input("Enter the B:"))

c=a+b
print(c)


name="Logritha"
name="Logritha Technologies"
name1=name  #Logritha Technologies
name1="Logritha" #Logritha
print(name)


name="Logritha"
"""
L => 0  =>-8
o => 1  =>-7
g => 2  =>-6
r => 3  =>-5
i => 4  =>-4
t => 5  =>-3
h => 6  =>-2
a => 7  =>-1
"""
print(name)
print(len(name))
print(name[0])
print(name[1])
print(name[2])
print(name[3])
print(name[4])
print(name[5])
print(name[6])
print(name[7])

for char in name:
    print(char)


print("L" in name)
print("T" in name)

name="Logritha"
name1="Technologies"

new_name=name+name1
print(new_name)
print(new_name[0:8])  # Starts with 0th Index Ends with 7 (8-1) #Logritha


new_name=name+" "+name1
print(new_name)

new_name="Logritha"

print(new_name[-8:-4]) 
print(new_name*3)

print(new_name[::2])
print(new_name[:3])
print(new_name[3:])
print(new_name[:])
print(new_name)
print(new_name.upper())

name="Muthukumaran"
dob="08/07/1997"

password_name=name[0:4].upper()
password_dob=dob[-4:]

print(password_name)
print(password_dob)

password=password_name+password_dob
print(password)



