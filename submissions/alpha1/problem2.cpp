#include<stdio.h>
#include<conio.h>
int main()
{
	int n;
	scanf("%d",&n);
	if(n%7==0 || n%10==7)
	printf("Buzz");
	else
	printf("Not Buzz");
	return 0;
}