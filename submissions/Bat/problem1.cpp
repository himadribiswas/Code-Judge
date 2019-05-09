#include<stdio.h>
int fact(int n);
int main(){
int n,m,rem,s,sum=0;
scanf("%d",&n);
m=n;
while(m!=0)
{
rem=m%10;
sum=sum+fact(rem);
m=m/10;	
}
if(sum==n)
printf("yes");
else
printf("No");
return 0;
}
int fact(int n)
{
if(n==0)
return 1;
n=n*fact(n-1);
return n;
}