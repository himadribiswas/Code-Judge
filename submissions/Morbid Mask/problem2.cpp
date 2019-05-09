#include<stdio.h>
main(){
int n,q,r;
printf("Enter a number:");
scanf("%d",&n);
q=n%10;
r=n%7;
if((q==7) || (r==0) ){
printf("Buzz");
}
else
printf("Not Buzz");
}
