#include<iostream>
#include"Spell_Correcter.h"
#include<string>
using namespace std;
int main() 
{
	string address = "../Manual & Files/error_file.txt";
	Spell_Correcter Corrector;
	Corrector.load_dict();
	
	if (Corrector.spell_correcor(address) == true)
		cout << "\nCorrected file has been produced";
	else
		cout << "\nTo be checked file not found" << endl;


	cout << endl << "Program has been ended"<<endl;
	system("pause");
}
