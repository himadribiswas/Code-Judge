#include<stdio.h>
#include<conio.h>
int fact(int n)
{
if(n==0||n==1)
return 1;
else
return(n*fact(n-1));
}
int main()
{
	int n,r,j,g,t,i=0,s=0,k;
	t=n;
	scanf("%d",&n);
	while(n%10!=0)
	{
		r=n/10;
		i++;
		n=r;
	}g=t;
	for(j=1;j<=i;j++)
	{
		k=t%10;
		s=s+fact(k);
		t=t/10;
	}
	if(g==s)
	printf("Yes");
	else
	printf("No");
return 0;
}