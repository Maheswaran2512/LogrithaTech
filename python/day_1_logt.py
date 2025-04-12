#datatype
""" integer float string complex boolean """
print("Day 1 understand")
a='10'
b=20.43
c=True
d=3+4j
name="logritha"
print(a)
print(a+str(b))
print(int(a)+b)
print(type(c))
print(type(name))
print(type(d))
print(type(b))
print(len(name))
print(name[0:6])
print(name[-4:])
print(name[-4:-1])
print(str(d))

# compare
a=10
b=2
c='54'
d=65
e=65
print(a+b)
print(a>b) #True
print(a<int(c)) #true
print(int(c)>=d) #False
print(a<=d) #True
print(a==b) #False
print(d!=e) #False

name=("Logritha Technology Training")
print("T" in name)
print("z" in name)
print(len(name))
print(name[5])
print(name[-5])

#adhaarcard password gen
name="MAHESWARAN"
dob="25/12/2003"
print(name[0:4])
password_name=name[0:4] #use .upper if in samall case
password_dob = dob[-4:]
print(password_name+password_dob)
#spacing (number of space will be create a space bw the text)
print(password_name+"      "+password_dob)

#arith
a=20
b=12
print(a+b)
print(a-b)
print(a*b)
print(a/b)
print(a%b)
print(a//b)

#logical Operator AND OR NOT
a=10
b=20
c=20
print(a>b and c==b) #a>b false and c==b true false
print(a>b)
print(c>b)
print(c==b)

print(a>b or c==b) #a>b false and c==b true true

print(not c==b) # c==b true flase

# name="Logritha"
x=input("enter:")
x=int(input("enter number/integer:"))
x=float(input("enter float:"))
x=str(input("enter string:"))