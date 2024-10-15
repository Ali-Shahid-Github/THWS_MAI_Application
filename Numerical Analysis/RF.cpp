#include<bits/stdc++.h>
#include <iomanip>
#include <conio.h>
#include <cmath>

using namespace std;


#define MAX_ITER 65
double func(double x)
{
	return 230*(x*x*x*x) + 18*(x*x*x) + 9*(x*x) -22*x -9;
}

void regulaFalsi(double a, double b)
{
	if (func(a) * func(b) >= 0)
	{
		cout << "You have not assumed right a and b\n";
		return;
	}

	double c = a; // Initialize result
	cout<<"n"<<"\t"<<"a"<<"\t\t"<<"b"<<"\t\t"<<setprecision(8)<<fixed<<"f(a)"<<"\t\t"<<"f(b)"<<"\t\t"<<"x_n+1"<<"\t\t"<<"| f(x_n+1) |"<<endl;
	for (int i=0; i < MAX_ITER; i++)
	{
		
		c = (a*func(b) - b*func(a))/ (func(b) - func(a));
		cout<<i+1<<"\t"<<a<<"\t"<<b<<"\t"<<setprecision(8)<<fixed<<func(a)<<"\t"<<func(b)<<"\t"<<c<<"\t"<<abs(func(c))<<endl;
		//getch();
		if (func(c)==0)
			break;
		else if (func(c)*func(a) < 0)
			b = c;
		else
			a = c;
	}
	cout << "The value of root is : " << c;
}

int main()
{
	
	regulaFalsi(0, 1);
	return 0;
}

