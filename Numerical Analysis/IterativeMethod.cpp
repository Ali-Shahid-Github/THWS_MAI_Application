#include<iostream>
#include<cmath>
#include<iomanip>
using namespace std;

int main()
{
	double x=6;
	double z;
	int i=0;
	double a;
	a=x;
	while(i++!=10)
	{
		
		z=(x -4)/(2*x - 5);
		cout << fixed;
		cout<<x<<setprecision(8)<<"\t"<<z<<"\t"<<z-x<<endl;
		x=z;
		
			
	}
	
	return 0;
}
