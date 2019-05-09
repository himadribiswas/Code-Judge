#include<stdio.h>
int main()
{int y,m,d,sum=0,f=0;
scanf("%d",&m);
scanf("%d",&d);
scanf("%d",&y);
if(y%400==0)
{f=1;
}
else if(y%4==0&&y%100!=0)
{f=1;
}
if(f==1)
{
       if((m-1)%2==0)
       {sum=(m-1)/2*31+29+((m-1)-(m-1)/2-1)*30+d;
       }
       if((m-1)%2!=0)
              {
                   sum=((m/2)*31)+29+(((m-1)-(m/2)-1)*30)+d;
       }
       }
  if(f!=1)
{
       if((m-1)%2==0)
       {sum=m/2*31+28+((m-1)-(m-1)/2-1)*30+d;
       }
       if((m-1)%2!=0)
       
       {sum=((m)/2)*31+28+(((m-1)-((m)/2)-1)*30)+d;
       }
       }
       
       printf("%d",sum);
      
       return 0;
       }
