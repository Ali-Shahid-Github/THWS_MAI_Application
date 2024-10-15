#include<iostream>
#include<iomanip>
#include<math.h>

/* Arrange systems of linear
   equations to be solved in
   diagonally dominant form
   and form equation for each
   unknown and define here
*/
/* In this example we are solving
   3x + 20y - z = -18
   2x - 3y + 20z = 25
   20x + y - 2z = 17
*/
/* Arranging given system of linear
   equations in diagonally dominant
   form:
   20x + y - 2z = 17
   3x + 20y -z = -18
   2x - 3y + 20z = 25
*/
/* Equations:
   x = (17-y+2z)/20
   y = (-18-3x+z)/20
   z = (25-2x+3y)/20
*/
/* Defining function */
#define f1(x,y,z,a,b,c)  (5 -y +0 +0 +0 + c )/10
#define f2(x,y,z,a,b,c)  (10 -x -z +0 +0 +0)/10
#define f3(x,y,z,a,b,c)  (10 -2*x +0 + a +0 +0)/20
#define f4(x,y,z,a,b,c)  (0 -0 -0 -z +b +0)/10
#define f5(x,y,z,a,b,c)  (0 -0 -3*z +0 +0 -c)/30
#define f6(x,y,z,a,b,c)  (5 +0 +0 +0 -2*a +2*b)/20

using namespace std;

/* Main function */
int main()
{
 float x0=0, y0=0, z0=0, a0=0, a11=0, a2=0,  x1, y1, z1, a1, a22, a33, e1, e2, e3, e4, e5, e6, e;
 int step=1;

 /* Setting precision and writing floating point values in fixed-point notation. */
 cout<< setprecision(6)<< fixed;

 /* Input */
 /* Reading tolerable error */
 cout<<"Enter tolerable error: ";
 cin>>e;

 cout<< endl<<"Iteration\tx1\t\tx2\t\tx3\t\tx4\t\tx5\t\tx6"<< endl;
 do
 {
  /* Calculation */
  x1 = f1(x0,y0,z0,a0, a11, a2);
  y1 = f2(x1,y0,z0,a0, a11, a2);
  z1 = f3(x1,y1,z0,a0, a11, a2);
  a1 = f4(x1,y1,z1,a0, a11, a2);
  a22 = f5(x1,y1,z1,a1, a11, a2);
  a33 = f6(x1,y1,z1,a1, a22, a2);
  cout<< step<<"\t\t"<< x1<<"\t"<< y1<<"\t"<< z1<<"\t"<< a1<<"\t"<< a22<<"\t"<< a33<< endl;

  /* Error */
  e1 = fabs(x0-x1);
  e2 = fabs(y0-y1);
  e3 = fabs(z0-z1);
  e4 = fabs(a0-a1);
  e5= fabs(a11-a22);
  e6 = fabs(a2-a33);


  step++;

  /* Set value for next iteration */
  x0 = x1;
  y0 = y1;
  z0 = z1;
  a0 = a1;
  a11 = a22;
  a2 = a33;
 }while(e1>e && e2>e && e3>e && e4>e && e5>e && e6>e);

 cout<< endl<<"Solution: x1 = "<< x1<<", x2 = "<< y1<<", x3 = "<< z1<<" and x4 = "<< a1<<" and x5 = "<< a22<<" and x6 = "<< a33;
 return 0;
}

