#include<bits/stdc++.h>
#include <iomanip>
#include <cmath>
using namespace std;
#define ERROR 0.00001


double func(double x)
{
	return x*sin(x) -1 ;
}

void bisection(double a, double b)
{
	if (func(a) * func(b) >= 0)
	{
		cout << "You have not assumed right a and b\n";
		return;
	}

	double c = a;
	int i=0;
	cout<<"n"<<setprecision(8)<<fixed<<setw(12)<<"a"<<"\t\t"<<"b"<<"\t\t"<<"c"<<"\t\t"<<"f(c)"<<"\t\t"<<"b-a"<< endl;
	while ((b-a) >= ERROR)
	{
		
		c = (a+b)/2;
		cout<<i++<<"\t"<<setprecision(8)<<fixed<<setw(12)<<a<<"\t"<<b<<"\t"<<c<<"\t"<<func(c)<<"\t"<<b-a << endl;
		if (func(c) == 0.0)
			break;
		else if (func(c)*func(a) < 0)
			b = c;
		else
			a = c;
	}
	cout << "Root is " << c;
}

int main()
{
	bisection(0, 2.0);
	return 0;
}

