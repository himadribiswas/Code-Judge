#include<stdio.h>
#include<math.h>
int main()
{
	int n,b,c,i,fact=1,sum=0;
        scanf("%d",&n);
	for(b=n;b!=0;b=b/10)
	{
		c=b%10;
		for(i=1;i<=c;i++)
		{
			fact=fact*i;
		}
			sum=sum+fact;
		fact=1;
	}	
	if(sum==n)
	printf("Yes");
	else
	printf("No");
	return 0;
}