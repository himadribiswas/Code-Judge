#include<stdio.h>
int fact(int);
int main(){
	int n,x,a,b,c,a1,b1,c1,a2,b2,c2;
	
	scanf("%d",&n);
	a1=n%10;
	a=n/10;
	a2=fact(a1);
	b=a/10;
	b1=a%10;
	b2=fact(b1);
	c=b/10;
	c1=b%10;
	c2=fact(c1);
	if(a2+b2+c2==n)
	{
		printf("Yes");
	}
	else if(a2+b2+c2!=n)
	printf("No");
	return 0;
}
int fact(int a){
if(a==1)
return 1;
else return a*fact(a-1);
}