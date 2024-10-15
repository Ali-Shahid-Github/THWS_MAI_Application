#include <iostream>
#include<math.h>
#include<conio.h>
#include<process.h>
# define f(x) -0.5*x*pow((80 - (x*x)),-0.75);

using namespace std;
int n;
double e,x0, x1;

int main()
{
	int i,n,flag=1;
double x2;
char ch;
cout<<"SIMPLE ITERATIVE METHOD";
cout<<"\nEnter The Value Of x0: ";
cin>>x0;
cout<<"\nEnter The Value Of N: ";
cin>>n;	
cout<<"\nEnter the value of E: ";
cin>>e;
x1=f(x0);
for(i=0; i<n && flag; i++)
{
	x2=x1-x0;
	if(x2<0)
		x2=x2*(-1);
	if(x2<e)
		flag=0;
	else
	{
		x0=x1;
		x1=f(x0);
	}
}
if(flag==1)
{
	cout<<"\nNo Convergenece";
}
else
{
	cout<<"\n\nAfter "<<i<<" Iterations, Root is "<<x1;
}
}

