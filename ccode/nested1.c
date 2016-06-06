// save file as nested.c
// compile as $gcc hello.c -o nested
// to run type ./nested or /home/user/ccode/nested
#include <stdio.h>

int main(){
	char asc = '0'; //set asc to 0
	int r,c;
	int count = 0;
	int v = 32;
	for (r = 0;r < 10; r++){
		for (c = 0; c < 10; c++){
			asc = (char)v; // convert int to char
			if(v < 127){
			printf ("%d=%c ",v, asc);
			}
			v++;
		}
		printf("\n");
	}
	printf("\n\n v = %d \n",v);
	return 0;
}
