#include<stdio.h>
#include<conio.h>
int fd(int a);
int com(int b);
int main()
{
	int i,j,r,k,m,n;
	scanf("%d",&m);
scanf("%d",&n);
if(m<n)
{

for(r=m;r<n;r++)

{
j=fd(r);
i=fd(j);
k=com(r);

if((i==1)&&(k==1))
{
printf("%d ",r);	
}

}


j=fd(n);
i=fd(j);
k=com(n);

if((i==1)&&(k==1))
{
printf("%d",n);	
}


}
else
printf("Invalid Input");
return 0;
}
	
	int fd(int x)
	{
		int  sum=0,w;
		while(x!=0)
		{
			w=x%10;
			sum= sum+w;
			x=x/10;
			
		}
	return sum ;
	}
	int com(int y)
	{
		int i,c=0,d=0;
		for(i=2;i<=y/2;i++)
		{
			if(y%i==0)
			{
				c=c+1;
			}
		}
	if(c!=0)
	{
		d=d+1;
	}
	return d;
	}
	
	
	