#include<stdio.h>
int main()
{
	int fact,x,d,sum=0,a,n;
printf("Enter a number");
scanf("%d",&a);

fact=1;

 while(a>0)
   {
   	d=n%10;
   	for(x=1;x<=d;x++)
   	  {
   	  	fact=fact*x;
		 }
		 sum=sum+fact;
		 n=n/10;
   }
if(sum==a)
printf("KRISNAMURTHY NO");
else 
printf("not a KRISNAMURTHY NO");
}
