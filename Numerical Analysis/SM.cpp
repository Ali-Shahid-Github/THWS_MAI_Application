#include <bits/stdc++.h>
#include <iomanip>
#include <cmath>
using namespace std;

float f(float x)
{
	return 230*(x*x*x*x) + 18*(x*x*x) + 9*(x*x) -22*x -9;
	//return x - 0.25*sin(x) -0.5;
	//return pow(x, 3) - 3.23*(x*x) -5.54*x + 9.84;
	//return sin(x) -5*x +2;
}

void secant(float x1, float x2, float E)
{
	float n = 0, xm, x0, c;
	cout<<fixed<<setprecision(8)<<"x"<<"\t\t"<<"x_n+1"<<"\t\t"<<"x_n+1 - n"<<"\n";
		do {
			x0 = (x1 * f(x2) - x2 * f(x1)) / (f(x2) - f(x1));
			c = f(x1) * f(x0);
			x1 = x2;
			x2 = x0;
			n++;
			if (c == 0)
				break;
			xm = (x1 * f(x2) - x2 * f(x1)) / (f(x2) - f(x1));
			cout<<fixed<<setprecision(8)<<x0<<"\t"<<xm<<"\t"<<fabs(xm - x0)<<"\n";
		} while (fabs(xm - x0) >= E); 
	
}

int main()
{
	
	secant(0, 1, 0.000001);
	return 0;
}

