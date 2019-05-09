import java.util.*;
class problem2
{
    public static void main(String args[])
    {
        int sum=0;
        int sum1=0;
    //    BufferedReader BR=new BufferedReader(new InputStreamReader(System.in));
         Scanner sc=new Scanner(System.in);
   //     System.out.println("");
        int mn=sc.nextInt();
   //     System.out.println("");
        int d=sc.nextInt();
 //       System.out.println("");
        int yr=sc.nextInt();
        
        if(yr%4==0)
        {   int mn1[]={31,29,31,30,31,30,31,31,30,31,30,31};
            for(int i=0;i<mn-1;i++)
            sum=sum+mn1[i];
            sum1=sum+d;
            System.out.print(sum1);
        } 
        else
        {
            int mn2[]={31,28,31,30,31,30,31,31,30,31,30,31};
            for(int i=0;i<mn-1;i++)
            sum=sum+mn2[i];
            sum1=sum+d;
            System.out.print(sum1);
        }
    }
}
    