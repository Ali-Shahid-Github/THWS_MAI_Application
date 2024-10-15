#include <iostream>
#include <iomanip>
#include <cmath>

using namespace std;

int main() {
	int i=0;
	double x=-1, x2=-1.1, f_x, f_x2, c, f_c=0;
	while(i!=10)
	{
	 
	f_x = (x*x*x*x*x)+ (x*x*x) +3;
	f_x2 = (x2*x2*x2*x2*x2)- (x2*x2*x2) -1;
	
	c= (x*f_x2 - x2*f_x)/ (f_x2 - f_x);
	f_c = (c*c*c*c*c*c)- c -1;
    cout<<i+1<<"\t"<<x<<"\t"<<x2<<"\t"<<setprecision(8)<<f_x<<"\t"<<f_x2<<"\t"<<c<<"\t"<<f_c;
    x=c;    	
    i++;
    cout<<"\n";
	}
    return 0;
}
