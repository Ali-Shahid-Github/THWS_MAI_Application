#include <iostream>
#include <iomanip>
#include <cmath>

using namespace std;

int main() {
	double x= 1;
    double f_x;
    double f_dash_x;
    double x_k_1;
	int i=0;
	cout<<"x"<< setprecision(8)<< fixed<<"\t\t"<<"f(x)"<<"\t\t"<<"f'(x)"<<"\t\t"<<"x_n+1"<<"\t\t"<<"| x_n+1 - 1 |"<<endl;
	while(i++!=5)
	{
		f_x = x*x*x - x*sin(x);                           //230*(x*x*x*x) + 18*(x*x*x) + 9*(x*x) -22*x -9;									//x - 0.25*sin(x) -0.5;//x*x*x -2*(x*x) + x -3;	// x*log(x) - 3;//x*sin(x) - 1; //x*x*x*x + x*x - 80; //x*x - exp(x);    //x*x*x -3*sin(x); //exp(-3*x)- (cos(x)/sin(x)); // //
    	f_dash_x =  3*(x*x) - x*cos(x) - sin(x);                                      //920*(x*x*x) + 54*(x*x) + 12*x -22;											//1 - 0.25*cos(x);//3*(x*x)- 4*x + 1;	//log(x) + 1;	//x*cos(x) + sin(x);  //4*(x*x*x) +2*x; //2*x - exp(x);  //cos(x)-1;  //3*(x*x)  -3*cos(x);   //1 + pow(cos(x),2)/pow(sin(x),2) - 3*exp(-3*x);//
		x_k_1 = x - (f_x/f_dash_x);
		cout<<x<< setprecision(8)<< fixed<<"\t"<<f_x<<"\t"<<f_dash_x<<"\t";
		cout<<x_k_1<<"\t"<<abs(x_k_1 - x)<<endl;
		x=x_k_1;	
	}
	
    

    return 0;
}
