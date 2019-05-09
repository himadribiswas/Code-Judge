#include<stdio.h>
int main()
{
	int n;
	scanf("%d",&n);
	if(n%10==7||n%7==0)
	{
		printf("Buzz");
	}
	else
	{
		printf("Not Buzz");
	}
	return 0;
}