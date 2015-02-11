

def str2int(s):
  """converts a string to an integer with the same bit pattern (little endian!!!)"""
  r = 0
  for c in s:
    r <<= 8
    r += ord(c)
  return r

def int2str(i, length=None):
  """converts a string to an integer with the same bit pattern (little endian!!!).

  If length is specified, the result is zero-padded or truncated as neccesary."""
  s = ""
  while i != 0:
    s += chr(i & 0xFF)
    i >>= 8
  s = s[::-1]
  if length is not None:
    sl = len(s)
    if sl < length:
      return "\x00" * (length - sl) + s
    elif sl > length:
      return s[0:length]
  return s
