#include<stdio.h>
main(){
	int x,rem,div;
	scanf("%d",&x);
	rem=x%10;
	div=x%7;
	if(rem==7&&div==0){
		printf("Buzz");
	}
	else  
	 printf("Not buzz");
}