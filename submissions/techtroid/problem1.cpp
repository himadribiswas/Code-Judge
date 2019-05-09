#include<stdio.h>
int main()

{int p,i,n,r,sum=0;
printf("enter the no.\n");
scanf("%d",&p);
p=n;
while(n>1)
{
n=n/10;
r=n%10;

for(i=1;i<=n;i++)
{
sum=sum*r;	
}
n=n+sum;
}
if(n==p)
printf("Yes");
else
printf("No");
}

