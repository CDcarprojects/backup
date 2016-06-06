#include <iostream>
using namespace std;

int main(){

		int number;
		for (number = 1; number < 101; number++){
								cout<<"\t";
								if(number%3 == 0 &number%5 == 0){
								cout<<"FizzBuzz ";}
								else if(number%3 == 0){
								cout<<"Fizz ";}
								else if(number%5 == 0){
								cout<<"Buzz ";}	
								else{
								cout<<number;}
															}
		
return 0;
}
