#include<stdio.h>

int main()
{
int j,i,x,sum=1,k=0,num,n;

scanf("%d",&n);
num=n;
while(num>0)
 {x=num%10;
 sum=1;
for(i=x;i>=1;i--)
{
sum=sum*i;
}
k=k+sum;
num=num/10;
}
if(n==k)
 printf("Yes");
else
 printf("No");

return 0;
}
