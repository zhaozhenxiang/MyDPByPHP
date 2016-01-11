命令模式
《设计模式》：将一个请求封装为一个对象，从而使你可用不用的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤销的操作。

command：命令
receiver：接受者、实际动作执行者
invoker：调度者

command 和 receiver在最开始就被绑定在一起了。一般是把receiver传入command中。各种各样receiver在command的一个方法中被调用，该方法内部调用了receiver的方法。
invoker只和command有关系，直接调用command的方法（该方法中调用了receiver方法）
实际上建立了一对一的映射

