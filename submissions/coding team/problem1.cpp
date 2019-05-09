#include<stdio.h>
#include<conio.h>
int main()
{
	int r,n,a,i,f, sum=0;
	scanf("%d",&n);
	a=n;
	while(n!=0)
	{
		r=n%10;
		f=1;
		for(i=1;i<=r;i++)
		{
			f=f*i;
		}
		sum=sum+f;
		n=n/10;
		
	}
	if(sum==a)
	printf("Yes");
	else
	printf("No");
	return 0;
}
