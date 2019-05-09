#include<stdio.h>
main()
{
	int n,last;
	scanf("%d",&n);
	last=n%10;
	if((last==7)||((n%7)==0))
	printf("Buzz");
	else
	printf("Not Buzz");
}
