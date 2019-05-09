#include<stdio.h>
#include<conio.h>
int main()
{int m,arr[5][5],i,j,su=0,sum=0;

scanf("%d",&m);
 if(m>2&&m<10)
 {                                                    
for(i=0;i<m;i++)
{for(j=0;j<m;j++)
{scanf("%d",&arr[i][j]);
}}                           
for(i=0;i<m;i++)
{for(j=0;j<m;j++)
{if(i==j)
{sum=sum+arr[i][j];
}}}
for(i=m-1;i>=0;i--)
{
                for(j=m-1;j>=0;j--)
                {
                                if(i==j)
                                {su=su+arr[i][j];
                }}}
                if(su>sum)
                {printf("%d",su);
                return 0;
                }
                if(su<sum)
                 {printf("%d",sum);
                 return 0;
                }
                
                   if(su==sum)
                 {printf("%d",sum);
                 return 0;
                }
                }  
                 else
                 {printf("SIZE OUT OF RANGE");}
              //  getch();
                return 0;
       }
                
