#include <iostream>
#include <iomanip>
#include <cmath>

using namespace std;

int main() {
	double x= 0.5;
    double f_x;
    double f_dash_x;
    double x_k_1=1;
	int i=0;
	cout<<"n "<< setprecision(8)<< fixed<<"\t"<<"x"<<"\t\t"<<"f(x)"<<"\t\t"<<"f(x) - x\n";
	while(i++!=3)
	{
		
		f_x = x - 0.25*sin(x) -0.5;
		cout<<i<< setprecision(8)<< fixed<<"\t"<<x<<"\t"<<f_x<<"\t";
		cout<<abs(f_x - x)<<endl;
		
		x=f_x;	
	}
	
    

    return 0;
}
