import java.util.*;
class problem1
{
    public int prime(int r)
    {   int i;int sum=0;
        for(i=1;i<=r;i++)
        {
            if(r%i==0)
            sum=sum+1; 
        }
        return sum;
    }
    public static void main(String args[])
    {
        problem1 ob=new problem1();
        int sum=0;
        int sum2=0,r=0,q=0;
        Scanner sc=new Scanner(System.in);
        //System.out.println("enter a number");
        int n=sc.nextInt();
        int nn=n;
        while(n>0)
        {
            sum=sum+1;
            n=n/10;
        }
        int p=(int)Math.pow(10,(sum-1));
        for(int i=0;i<sum;i++)
        {
           //System.out.println(nn);
            if(ob.prime(nn)==2)
            sum2=sum2+1;
            r=nn%p;
            q=nn/p;
            nn=r*10+q;
        }
        if(sum2==sum)
        System.out.println("CIRCULAR PRIME");
        else
        System.out.println("NOT  A CIRCULAR PRIME");
    }
}
    

       