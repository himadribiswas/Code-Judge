#include<stdio.h>
#include<conio.h>
int main()
{
	int r,a,i,n,f;
	scanf("%d",&n);
	r=n%10;
    if((r==7)||(n%7==0))
    {
    	printf("Buzz");
    	
	}
	else
	printf("Not Buzz");
	return 0;
		

}
