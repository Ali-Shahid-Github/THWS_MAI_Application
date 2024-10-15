#include <iostream>
#include <iomanip>
#include <cmath>

using namespace std;

int main() {
	int i=0;
	double x=2, x2=4, f_x, f_x2, c, f_c=0;
	while(i!=10)
	{
	
	 
	f_x = (x*x*x)- 9*x +1;
	f_x2 = (x2*x2*x2)- 9*x2 +1;
	
	c= (x*f_x2 - x2*f_x)/ (f_x2 - f_x);
	f_c = (c*c*c*c*c*c)- c -1;
    cout<<i+1<<"\t"<<x<<"\t"<<x2<<"\t"<<setprecision(8)<<fixed<<f_x<<"\t"<<f_x2<<"\t"<<c<<"\t"<<f_c;
    
    if(x*f_c<0)	
    	x=c;
    else
    	x2=c;
    	
    i++;
    cout<<"\n";
	}
    return 0;
}
