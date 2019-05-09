#include<stdio.h>
int main()
{
	int a;
	scanf("%d",&a);
	if((a%7==0)||(a%10==7))
	{
		printf("Buzz");
	}
	else
	printf("Not Buzz");
	return 0;
}
